<form action="/auth/login" method="POST">
    @csrf  <!-- Wajib di Laravel untuk keamanan CSRF -->
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Submit</button>
</form>
<!-- Tambahkan meta tag CSRF Token di bagian <head> -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Library jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  // Setup header CSRF Token untuk semua request Ajax jQuery
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  // Eksekusi Ajax Request
  $.ajax({
    url: '/auth/login',
    method: 'POST',
    data: {
      username: 'john',
      password: '12345'
    },
    success: function(response) {
      console.log('Data submitted successfully', response);
      alert(response.message);
    },
    error: function(xhr, status, error) {
      console.log('Error occurred: ' + error);
    }
  });
</script>
