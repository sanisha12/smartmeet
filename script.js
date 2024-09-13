// Handle Sign-In Button Click
document.getElementById('signInBtn').addEventListener('click', function() {
    window.location.href = 'signin.html';
    // TODO: Implement Google Sign-In
});

// Handle Join Meeting Button Click
document.getElementById('joinMeetingBtn').addEventListener('click', function() {
    const meetingCode = document.getElementById('meetingCode').value;
    if (meetingCode) {
        alert(`Joining Meeting with Code: ${meetingCode}`);
        // TODO: Implement Meeting Joining Logic (e.g., redirect to meeting room)
    } else {
        alert('Please enter a meeting code');
    }
});
// Handle Sign Up Button Click
document.getElementById('signUpBtn').addEventListener('click', function() {
    // Redirect to a sign-up page (you can create sign-up.html if needed)
    window.location.href = 'signup.html';
});
