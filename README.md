# user-activity-tracking
User tracking and Activity logging trait package for laravel

## Installation
Download files to Laravel, under new folder 'packages'
Run composer update.

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
$user = new User();

$user->save();

$user->activities()->create(['activity'=>'A new user has been created.');

```
Retreive activity in your blades
```
@foreach($user->activities as $activity)
<p>{{$activity->activity}}</p>
@endforeach
```
