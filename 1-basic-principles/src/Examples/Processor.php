<?php

declare(strict_types=1);

namespace App\Examples;

class Processor {
    public $h = "localhost";
    public $u = "root";
    public $p = "";
    public $n = "ecommerce";

    public function prc($o) {
        // Connect to the database
        $c = new mysqli($this->h, $this->u, $this->p, $this->n);
        if ($c->connect_error) {
            die("Connection failed: " . $c->connect_error);
        }

        // Validate order
        if (empty($o['cn']) || empty($o['ce']) || empty($o['it'])) {
            die("Invalid order data");
        }

        // Calculate total
        $t = 0;
        foreach ($o['it'] as $i) {
            $t += $i['pr'] * $i['q'];
        }

        if ($t < 5) {
            $t += 5;
        }

        // Save order to database
        $s = "INSERT INTO o (cn, ce, ta) VALUES ('" . $o['cn'] . "', '" . $o['ce'] . "', " . $t . ")";
        if ($c->query($s) === TRUE) {
            $oid = $c->insert_id;
            foreach ($o['it'] as $i) {
                $s = "INSERT INTO oi (oid, pn, q, pr) VALUES (" . $oid . ", '" . $i['n'] . "', " . $i['q'] . ", " . $i['pr'] . ")";
                $c->query($s);
            }
        } else {
            die("Error: " . $s . "<br>" . $c->error);
        }

        // Send confirmation email
        mail($o['ce'], "OC", "TYFYO!");

        // Close the connection
        $c->close();
    }
}