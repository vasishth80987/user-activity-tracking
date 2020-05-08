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

$user->activities()->create(['activity_group'=>'subscriptions','activity'=>'You have succesfully subscribed to a new plan.']);
$user->activities()->create(['activity_group'=>'invoicing','activity'=>'A new subscription invoice has been mailed']);

```
Retrieve activity in your blades
```
@foreach($user->activities as $activity)
<p>{{$activity->activity}}</p>
@endforeach
```
