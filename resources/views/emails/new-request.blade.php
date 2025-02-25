<!DOCTYPE html>
<html>
<head>
    <title>New Request</title>
</head>
<body>
    <h2>New Request by {{ $requestData['requested_by'] }}</h2>
    <hr>
    <p>A new request has been submitted. Below are the details:</p>
    
    <p><strong>Representative Name:</strong> {{ $requestData['representative_name'] }}</p>
    <p><strong>Event Name:</strong> {{ $requestData['event_name'] }}</p>
    <p><strong>Purpose:</strong> {{ $requestData['purpose'] }}</p>
    <p><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($requestData['start_date'])->format('M d, Y') }}</p>
    <p><strong>End Date:</strong> {{ \Carbon\Carbon::parse($requestData['end_date'])->format('M d, Y') }}</p>
    <p><strong>Location:</strong> {{ $requestData['location'] }}</p>
    
    <br>
    <p>Kindly review the request in the system for further details and necessary action.</p>
    
</body>
</html>
