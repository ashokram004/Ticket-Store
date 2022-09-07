:root {
  --size: 1;
  --background: #000;
  --color1: #d25778;
  --color2: #ec585c;
  --color3: #e7d155;
  --color4: #56a8c6;
}

body {
  background: var(--background);
  color: white;
  font-family: Arial, Helvetica, sans-serif;
}

.ticket {
  width: 650px;
  height: 320px;
  margin: 100px auto;
  position: relative;
  transition: all 300ms cubic-bezier(0.03, 0.98, 0.53, 0.99) 0s;
  background: linear-gradient(
    to right,
    var(--color1),
    var(--color2),
    var(--color3),
    var(--color4)
  );
  border-radius: 20px;
  padding: 5px;
}

.ticket:before,
.ticket:after {
  content: '';
  display: block;
  position: absolute;
  top: 130px;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  z-index: 2;
  background-color: var(--background);
}

.ticket:before {
  border: 5px solid var(--color1);
  left: -35px;
}

.ticket:after {
  border: 5px solid var(--color4);
  right: -35px;
}

.ticket-content-wrapper {
  width: 100%;
  height: 100%;
  position: relative;
  background: var(--background);
  border-radius: 15px;
}

.ticket:before {
  border: 5px solid var(--color1);
  left: -35px;
  clip-path: circle(65% at 100% 50%);
}

.ticket:after {
  border: 5px solid var(--color4);
  right: -35px;
  clip-path: circle(65% at 0 50%);
}