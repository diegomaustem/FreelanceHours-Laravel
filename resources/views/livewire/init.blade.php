<div>
    <input wire:model.live="search"/>

    <br>

    <ul>
        @foreach ($this->users as $users)
            <li>
                {{ $user->name }}
            </li>
        @endforeach
    </ul>
</div>
