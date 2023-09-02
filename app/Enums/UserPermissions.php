<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\FlaggedEnum;

final class UserPermissions extends FlaggedEnum
{
    const CreateDrafts = 1 << 0;
    const WriteComments = 1 << 1;
    const ManageComments = 1 << 3;
    const ManageDrafts = 1 << 4;
    const ManageCategories = 1 << 5;

    // Shortcuts

    const User = self::CreateDrafts | self::WriteComments;
    const Moderator = self::User | self::ManageComments;
    const Admin = self::Moderator | self::ManageDrafts | self::ManageCategories;
}
