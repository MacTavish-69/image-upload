@if(Session::has('success'))
    <div id="alert" class="notification is-success cs-alert">
        <button class="delete" onclick="hideAlert()"></button>
        {{ Session('success') }}
    </div>
@endif

<script>
    function hideAlert() {
        document.getElementById("alert").classList.add("d-none");
    }
</script>
