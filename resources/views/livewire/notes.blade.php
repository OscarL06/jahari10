<div class="flex flex-col items-center w-full mt-3" x-show="open">
    <textarea wire:model.defer="notes" cols="30" rows="10" class="w-5/6 border-none rounded-md shadow focus:ring-1 focus:ring-purple-800" placeholder="Notes">
        @if (!empty($notes))
            {!! nl2br(e($notes)) !!}
        @endif
    </textarea>
    <button id="saveNote" class="w-1/4 py-1 mt-2 mr-3 text-white rounded-md shadow bg-main" wire:click="saveNotes">
        Save
    </button>
</div>
