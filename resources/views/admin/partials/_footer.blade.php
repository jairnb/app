<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <p>Copyright &copy; <span id="year"></span></p>
        </div>
    </div>
</footer>

@push('scripts')
    <script>
        $(document).ready(function() {
            let date = new Date;
            $("#year").text(date.getFullYear());
        });
    </script>
@endpush
