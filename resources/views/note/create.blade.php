<x-app-layout>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Create New Note</h1>
        <form action="{{route("note.store")}}" method="POST" class="note">
            {{-- **TO STUDY csrf???? --}}
            @csrf
            <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here" ></textarea> 
            <div class="note-buttons">
                <a href="{{route("note.index")}}" class="note-cancel-buttons">Cancel</a>
                <button class="note-submit-button"> Submit </button>
            </div>
        </form>
    </div>
</x-app-layout>
