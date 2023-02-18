<?php

require './vendor/autoload.php';

use App\UserModule\Dto\User;
use Ramsey\Uuid\Uuid;
use App\UserModule\Facade as UserFacade;

$id = (string)Uuid::uuid4();
$userFacade = UserFacade::create();

$userFacade->addUser(new User($id, 'Matt Damon'));

$foundUser = $userFacade->findUserById($id);
$notFoundUser = $userFacade->findUserById('not existing id');

assert($foundUser->id === $id);
assert($foundUser->name === 'Matt Damon');
assert($notFoundUser === null);

echo "Finished.\n";
