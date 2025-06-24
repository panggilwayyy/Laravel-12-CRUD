<div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Notes') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">{{ __('Manage your Notes') }}</flux:subheading>
    <flux:separator variant="subtle" />


    <flux:modal.trigger name="create-note">
    <flux:button class="mt-4">Buat Catatan</flux:button>
    </flux:modal.trigger>

@if (session('success'))
    <div
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => {show = false}, 3000)"
        class="fixed top-5 bg-green-600 text-white text-sm p-4 rounded-lg shadow-lg z-50"
        role="alert"
    >
        <p>{{ session('success') }}</p>
    </div>
@endif

    <livewire:create-note />


    {{-- Notes Table --}}

    <table class='table-auto w-full bg-slate-800 shadow-md rounded-md mt-5'>
        <thead class='bg-slate-900'>
            <tr>
                <th class='px-4 py-2 text-left'>Judul</th>
                <th class='px-4 py-2 text-left'>Content</th>
                <th class='px-4 py-2 text-center'>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($notes as $note)
            <tr class="border-t">
                <td class="px-4 py-2">{{ $note->title }}</td>
                <td class="px-4 py-2">{{ $note->content }}</td>
                <td class="px-4 py-2 text-center space-x-2">
                    <flux:button>Edit</flux:button>
                    <flux:button variant="danger">Delete</flux:button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="px-4 py-2 text-center text-gray-500">No notes available</td>
            </tr>
            @endforelse
        </tbody>
    </table>


    <div class="mt-4">
        {{ $notes->links() }}
    </div>
</div>
