<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @php
        class person {
            public string $name;
            public string $address;
        }

        $person = new Person;
        $person->name = "Hanif";
        $person->address = "Indonesia"
    @endphp

    <p>{{ $person->name }}</p>
    <p>{{ $person->address }}</p>
    
</body>
</html>