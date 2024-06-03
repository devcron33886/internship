<?php

namespace App\Models\Enum;

enum ApplicationType: string {
case INTERNSHIP = 'internship';
case VOLUNTEERING = 'volunteering';

	public function getLabel(): string {
		return match ($this) {
			self::INTERNSHIP => 'Internship',
			self::VOLUNTEERING => 'Volunteering',
		};
	}

	public function getColor(): string | array | null {
		return match ($this) {
			self::INTERNSHIP => 'info',
			self::VOLUNTEERING => 'success',
		};
	}
}
