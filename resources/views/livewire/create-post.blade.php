<div>
   
    <h1>Titulo: "{{ $title }}"</h1>
    <br>

    <form wire:submit="save">
        <label>
            <span>Title</span>
     
            <input type="text" wire:model="title"> 
        </label>
     
        <label>
            <span>Content</span>
     
            <textarea wire:model="content"></textarea> 
        </label>
     
        <button type="submit">Save</button>
    </form>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
</div>
