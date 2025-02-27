<form wire:submit.prevent="save" class="p-5">
    {{ $this->form }}
    <x-livewire-btn>
        <x-slot:loadingText>
            Updating...
            </x-slot>
            <svg class="w-5 h-5 mr-2" data-darkreader-inline-stroke="" fill="none" stroke="currentColor"
                style="--darkreader-inline-stroke:currentColor;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                </path>
            </svg>
            Update
    </x-livewire-btn>
</form>
@push('scripts')
    <script>
            const toastBox = document.querySelector('.toast_box');
        window.addEventListener('toast', function({
            detail: {
                type,
                message,
                icon,
            }
        }) {
            const toastEl = document.createElement('div');
            toastEl.innerHTML = `<x-toast-alert type="${type}" message="${message}"/>`;
            toastBox.appendChild(toastEl);
            setTimeout(() => {
                toastBox.removeChild(toastEl);
            }, 3000);

        });
    </script>
@endpush
