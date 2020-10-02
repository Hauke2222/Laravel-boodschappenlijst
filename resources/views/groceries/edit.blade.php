@extends ('layouts.app')

@section ('create')
<form action="{{ route('groceries.update', $grocery->id) }}" method="POST">
    @csrf
    @method('PUT')
        <br>
        <label for="name">Product:</label>
        <input type="text" id="name" name="name" value="{{ $grocery->name }}" required>
        
        <label for="amount">Aantal:</label>
        <input type="number" id="amount" name="amount" value="{{ $grocery->amount }}" required>
        
        <label for="price">Prijs:</label>
        <input type="number" id="price" name="price" value="{{ $grocery->price }}" required>

        <button type="submit" value="Submit">Submit</button>

    </form>
@endsection ('create')