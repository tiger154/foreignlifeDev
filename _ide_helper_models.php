<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace foreignlifeDev\Models{
/**
 * foreignlifeDev\Models\Boards
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $tags
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $answers
 * @property-read mixed $link
 * @property-read mixed $views
 * @property-read mixed $votes
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Models\Boards whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Models\Boards whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Models\Boards whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Models\Boards whereTags($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Models\Boards whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Models\Boards whereUpdatedAt($value)
 */
	class Boards extends \Eloquent {}
}

namespace foreignlifeDev{
/**
 * foreignlifeDev\Posts
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Posts whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Posts whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Posts whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Posts whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\Posts whereUpdatedAt($value)
 */
	class Posts extends \Eloquent {}
}

namespace foreignlifeDev{
/**
 * foreignlifeDev\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\foreignlifeDev\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

