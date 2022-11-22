# Arduino Prototyping Project

--ESP32 Board--

A system for managing and controlling accesses using RFID with an ESP32 board. The keys
for access and the relative name of the owner are kept in a MySql database which
it is queried after each entry request. In the event that a user has no tag
access is also available via numerical PIN on the keypad. Once logged in,
it will be reported and recorded on an online list on Google Sheets that can be viewed
and downloaded by the appropriate operators.

The goal is therefore to present a simple safety system. The system even in its own
simplicity can be very effective. Access permissions can be given and removed remotely
accessing the database.
The idea behind it is that of its use in a structure in which there are no operators
humans and it is necessary to manage, modify and verify accesses remotely.
