<?php

use App\Models\User;

use function Pest\Laravel\{actingAs, assertDatabaseCount, assertDatabaseHas, post};

it(
    'should be able to create a new question bigger than 255 characters',
    function () {

        /*  //Arrange :: PREPARAR
         $user = User::factory()->create();
         // login as user
         actingAs($user);

         //Act :: AGIR
         $request = post('question.store', [
             'question' => str_repeat('*', 260) . '?',
         ]);

         //Assert :: VERIFICAR
         $request->assertRedirect('dashboard');
         assertDatabaseCount('questions', 1);
         assertDatabaseHas('questions', [
             'question' => str_repeat('*', 260) . '?',
         ]); */
    }
);

it('should check if ends with questions mark ?', function () {

});

it('should have at least 10 characters', function () {

});
