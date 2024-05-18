<x-app-layout>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <div class="note-container py-12">
        <a href="{{route("note.create")}}" class="new-note-btn">
            New Note
        </a>

        <div class = "notes">
            @foreach($notes as $note)
                <div class = "note-body">
                    {{Str::words($note->note,30)}}
                </div>
                <div class="note-buttons">
                    <a href="{{route("note.show",$note)}}" class = "note-edit-button">View</a>
                    <a href="{{route("note.edit",$note)}}" class = "note-edit-button">Edit</a>
                </div>
            @endforeach
            {{$notes->links()}}

        </div>
    </div>
</x-app-layout>

{{-- layout is the component name! --}}