<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('orders.{id}', function ($user, $id) {
    // You can implement your own logic to determine if the user is authorized to listen to this order channel.
    // For example, you might check if the user is associated with the order in your database.
    return true; // Allow all users for demonstration purposes. Adjust as needed.
});
