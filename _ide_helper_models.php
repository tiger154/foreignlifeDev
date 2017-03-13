<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace sinbie\Models{
/**
 * sinbie\Models\Boards
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
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Models\Boards whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Models\Boards whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Models\Boards whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Models\Boards whereTags($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Models\Boards whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Models\Boards whereUpdatedAt($value)
 */
	class Boards extends \Eloquent {}
}

namespace sinbie{
/**
 * sinbie\Posts
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Posts whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Posts whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Posts whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Posts whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\Posts whereUpdatedAt($value)
 */
	class Posts extends \Eloquent {}
}

namespace sinbie{
/**
 * sinbie\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Query\Builder|\sinbie\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\sinbie\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

