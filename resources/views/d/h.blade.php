<html>
<head>
    <title>Dependent dropdown example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    @php
    use App\Models\Faculty;
    use App\Models\Department;

    $faculty=Faculty::all();

@endphp
    <div class="m-5 w-50">
        <h1 class="lead">Dependent dropdown example</h1>
        <div class="mb-3">
            <select class="form-select form-select-lg mb-3" id="country">
                <option selected disabled>Select country</option>
                @foreach ($faculty as $item )
                <option  value="{{$item->id}}">{{$item->name;}}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <select class="form-select form-select-lg mb-3" id="state"></select>
        </div>
       
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#country').on('change', function () {
                var countryId = this.value;
                $('#state').html('');
            });
            
        });
    </script>
</body>
</html>