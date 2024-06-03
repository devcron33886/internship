<?php

namespace App\Livewire;

use App\Models\Application;
use Livewire\Component;
use Livewire\WithPagination;

class ApplicationComponent extends Component {

	use WithPagination;
	public function render() {
		$applications = Application::orderBy('id', 'DESC')->paginate(5);
		return view('livewire.application-component',
			['applications' => $applications]);
	}
}
