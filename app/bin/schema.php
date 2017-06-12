<?php
/** @var \Exedra\Application $app */
$app = require_once __DIR__ .'/../../app.php';

$capsule = $app->eloquent;

$connection = $capsule->getConnection();

$connection->useDefaultSchemaGrammar();

$schema = new \Laraquent\Schema($connection);

$schema->table('user', function($table) {
    $table->increments('id');
    $table->string('email');
    $table->string('password');
    $table->timestamps();
});

$schema->table('oauth_client', function(\Laraquent\Blueprint $table) {
    $table->string('id', 40)->primary();
    $table->string('secret', 50);
    $table->string('name');
    $table->string('endpoint');
    $table->timestamps();
});

$schema->table('oauth_access_token', function(\Laraquent\Blueprint $table) {
    $table->string('id', 100)->primary();
    $table->dateTime('expire_time');
    $table->integer('user_id');
    $table->string('client_id', 100);
    $table->string('name');
    $table->text('scopes');
    $table->boolean('revoked');
    $table->timestamps();
//    $table->unique(['id']);
});

$schema->table('oauth_refresh_token', function(\Laraquent\Blueprint $table) {
    $table->string('id', 100)->primary();
    $table->string('access_token_id', 100);
    $table->dateTime('expire_time');
    $table->boolean('revoked')->default(false);
    $table->timestamps();
});