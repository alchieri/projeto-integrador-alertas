@extends('dashboard')
@section('content')
<div id="calendar"></div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar')
        const calendar = new Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        })
        calendar.render()
    })
</script>
@endsection