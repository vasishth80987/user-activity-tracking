# user-activity-tracking
User tracking and Activity logging trait package for laravel

## Installation
```
composer require vsynch/activity-tracking
```

## Publish migrations
``
php artisan vendor:publish --provider='Vsynch\ActivityTracking\ActivityTrackingServiceProvider'
``

## Run migrations
``
php artisan migrate
``

## Usage
Add trait 'Trackable' to your models.
```
class User extends Authenticatable
{
    use Trackable;
}
```
Now you can add activity messages to your classes in your user functions
```
$user = Auth::user();

$user->activities()->create(['subscriptions'=>'A new subscription has been created');
$user->activities()->create(['invoicing'=>'A new subscription invoice has been mailed');

```
Retrieve activity in your blades
```
@foreach($user->activities as $activity)
<p>{{$activity->activity}}</p>
@endforeach
```
