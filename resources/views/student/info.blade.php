
    <h2>Student Information Page</h2>
    <form method="post" action="{{ route('student.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>





