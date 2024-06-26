<?php

declare(strict_types=1);

namespace App\Solid\SingleResponsibilityPrinciple\Example2;

use App\Helper\Client;
use App\Helper\EntityManager;
use App\Helper\Mailer;

class UserFacade
{


    public function __construct(
        private readonly EntityManager $entityManager,
        private readonly UserMailer $mailer,
        private readonly UserNotifier $notifier,
        private readonly UserFactory $userFactory
    )
    {
    }

    public function create(): void
    {
        $user = $this->userFactory->create('John Doe', 'john.doe@csretail.cz');

        $this->entityManager->save($user);

        $this->mailer->sendUserConfirmationEmail($user->getName(), $user->getEmail());
        $this->notifier->sendAdminUserConfirmation($user->getEmail());
    }

}