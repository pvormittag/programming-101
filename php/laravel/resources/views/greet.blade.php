<html>
<head>
    <title>Greeting</title>
</head>
<body>
    <h1>Hello, {{ $name }}</h1>
    <p>{{ $gender }}</p>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="text" name="name" value="{{ $name }}" />
        <input type="file" name="file" />

        <input type="checkbox" name="filter" />
        <select name="gender">
            <option value="">Select A Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
