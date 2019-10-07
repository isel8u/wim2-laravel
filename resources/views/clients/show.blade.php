@extends('layouts.app')
@section('content')
<div>
    <p><?php echo $client->name ?></p>
    <p><?php echo $client->email ?></p>
    <p><?php echo $client->status ?></p>
    <p><?php echo $client->id ?></p>
</div>