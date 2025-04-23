<?php

namespace App\Enum;

enum RolesEnum: string {
  case ADMIN = 'admin';
  case STUDENT = 'student';
  case INSTRUCTOR = 'instructor';

  // public static function getValues(): array {
  //     return array_map(fn(self $case) => $case->value, self::cases());
  // }

  // ✅ Return values as array: ['admin', 'student', 'teacher']
  public static function values(): array
  {
      return array_column(self::cases(), 'value');
  }
}