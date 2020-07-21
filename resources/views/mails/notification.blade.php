Hello,,
<p>This is a demo email for testing purposes! Also, it's the HTML version.</p>
 
<p><u>User Information:</u></p>
 
<div>
    <p><b>Surname:</b>&nbsp;{{ $user->surname }}</p>
    <p><b>FirstName:</b>&nbsp;{{ $user->firstname }}</p>
    <p><b>Address:</b>&nbsp;{{ $user->address }}</p>
    <p><b>Phone:</b>&nbsp;{{ $user->phone }}</p>
    <p><b>Email:</b>&nbsp;{{ $user->email }}</p>
    <p><b>Date Of Birth:</b>&nbsp;{{ $user->dob }}</p>
</div>
 
<p><u>Next of kin Information:</u></p>
 
<div>
    <p><b>Surname:</b>&nbsp;{{ $user->kin->surname }}</p>
    <p><b>FirstName:</b>&nbsp;{{ $user->kin->firstname }}</p>
    <p><b>Address:</b>&nbsp;{{ $user->kin->address }}</p>
    <p><b>Phone:</b>&nbsp;{{ $user->kin->phone }}</p>
    <p><b>Email:</b>&nbsp;{{ $user->kin->email }}</p>
</div>

<p><u>Employer Information:</u></p>

<div>
    <p><b>Name:</b>&nbsp;{{ $user->employer->name }}</p>
    <p><b>Address:</b>&nbsp;{{ $user->employer->address }}</p>
    <p><b>Email:</b>&nbsp;{{ $user->employer->email }}</p>
</div>
 
Thank You,