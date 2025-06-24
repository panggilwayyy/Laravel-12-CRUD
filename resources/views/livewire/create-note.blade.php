<div>
<flux:modal name="create-note" class="md:w-900">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">buat catatan</flux:heading>
            <flux:text class="mt-2">Buat tulisan dibawah ini.</flux:text>
        </div>

        <flux:input label="Judul" wire:model="title" placeholder="Judul Catatan"  />

        <flux:textarea label="Catatan" wire:model="content" placeholder="Tulis Catatan yang Ingin ditulis"  />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary" wire:click="save">Save changes</flux:button>
        </div>
    </div>
</flux:modal>
</div>