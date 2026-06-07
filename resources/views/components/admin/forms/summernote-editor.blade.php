@props([
    'id' => 'summernote-editor',
    'wireModel' => null,
    'placeholder' => 'Write your content here...',
    'height' => 550,
])

<style>
    .note-editor {
        background: rgba(15, 23, 42, 0.5);
        border: 1px solid rgb(51 65 85) !important;
        border-radius: 0.5rem;
        overflow: hidden;
    }

    .note-toolbar {
        background: rgb(15 23 42) !important;
        border-bottom: 1px solid rgb(51 65 85) !important;
        padding: 0.75rem !important;
        min-height: 52px;
    }

    .note-toolbar .note-btn-group {
        margin-right: 0.5rem !important;
    }

    .note-toolbar .note-btn {
        background: rgb(30 41 59) !important;
        color: rgb(226 232 240) !important;
        border: 1px solid rgb(51 65 85) !important;
        border-radius: 0.25rem !important;
        padding: 0.35rem 0.5rem !important;
    }

    .note-toolbar .note-btn:hover,
    .note-toolbar .note-btn.active {
        background: rgba(251, 191, 36, 0.15) !important;
        color: rgb(251 191 36) !important;
        border-color: rgba(251, 191, 36, 0.4) !important;
    }

    .note-toolbar .dropdown-menu {
        background: rgb(15 23 42) !important;
        border: 1px solid rgb(51 65 85) !important;
        border-radius: 0.5rem;
        padding: 0.5rem;
    }

    .note-toolbar .dropdown-item,
    .note-toolbar .note-dropdown-item {
        color: rgb(226 232 240) !important;
    }

    .note-toolbar .dropdown-item:hover,
    .note-toolbar .note-dropdown-item:hover {
        background: rgba(251, 191, 36, 0.15) !important;
        color: rgb(251 191 36) !important;
    }

    .note-editing-area {
        background: rgb(15 23 42 / 0.35) !important;
    }

    .note-editable {
        min-height: 420px;
        background: transparent !important;
        color: rgb(241 245 249) !important;
        padding: 1rem !important;
    }

    .note-placeholder {
        color: rgb(100 116 139) !important;
    }

    .note-statusbar {
        background: rgb(15 23 42) !important;
        border-top: 1px solid rgb(51 65 85) !important;
    }

    .note-resizebar {
        color: rgb(148 163 184) !important;
    }

    
</style>

<textarea id="{{ $id }}">{{ $slot }}</textarea>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        $('#{{ $id }}').summernote({
            height: {{ $height }},
            placeholder: @js($placeholder),
            dialogsInBody: true,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview']]
            ],

            callbacks: {
                onChange: function(contents) {
                    @if ($wireModel)
                        @this.set('{{ $wireModel }}', contents);
                    @endif
                }
            }
        });
    });
</script>