// const plumberList = document.getElementById('plumberList');

// // Sample plumber data (replace with your actual data)
// const plumbers = [
//   { name: 'Raj Sharma', isPlumber: true },
//   { name: 'Kiran Pai', isPlumber: false },
//   { name: 'Ankith Goel', isPlumber: true }
// ];

// // Function to create a list item for a plumber
// function createPlumberListItem(plumber) {
//   const li = document.createElement('li');
//   const userIcon = document.createElement('img');
//   const plumberName = document.createElement('span');

//   userIcon.src = plumber.isPlumber ? 'user-icon.png' : 'non-plumber-icon.png'; // Replace with actual icon paths
//   userIcon.classList.add('user-icon');
//   plumberName.textContent = plumber.name;
//   plumberName.classList.add('plumber-name');

//   li.appendChild(userIcon);
//   li.appendChild(plumberName);

//   return li;
// }

// // Add plumbers to the list
// plumbers.forEach(plumber => {
//   const li = createPlumberListItem(plumber);
//   plumberList.appendChild(li);

//   // Add click event listener (optional, for example, to show more details)
//   li.addEventListener('click', () => {
//     console.log(`Clicked on ${plumber.name}`);
//     // Add your desired action here, e.g., open a modal, navigate to a profile page
//   });
// });