@extends ('layouts.app')

@section ('body')
<table style="width:50%">
    <tr>
        <th>Product</th>
        <th>Prijs</th>
        <th>Aantal</th>
        <th>Totaal</th>
        <th>Bewerk</th>
        <th>Verwijder</th>
    </tr>
    <?php $totalPrice = 0 ?>
    <?php foreach($groceriesFromDatabase as $boodschap) { ?>
        <?php $boodschapPrijs = 0 ?>
    <tr>
        <td><?php echo $boodschap->name; ?></td>
        <td><?php echo $boodschap->price; ?></td>
        <td><?php echo $boodschap->amount; ?></td>
        <td><?php echo $boodschapPrijs = $boodschap->amount * $boodschap->price ?></td>
        <td><a href="{{ route('groceries.edit', $boodschap->id) }}"><button><span style='font-size:25px;'>&#9998;</span></button></a></td>
        <td>
            <form method="post" action="{{ route('groceries.destroy', $boodschap->id) }}">
                @method('DELETE')
                @csrf
                <button type="submit"><span style='font-size:25px;'>&#10007;</span></button>
            </form>
        </td>
    </tr>
        <?php $totalPrice += $boodschapPrijs ?>
    <?php } ?>
    <tr>
        <td>Totaal</td>
        <td>-</td>
        <td>-</td>
        <td><?php echo $totalPrice ?></td>
    </tr>
</table>
@endsection ('body')