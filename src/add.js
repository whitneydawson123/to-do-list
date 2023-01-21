// Global variables
let tasks = [];

// DOM elements
const taskList = document.querySelector('#tasks');
const addTaskForm = document.querySelector('#add-task-form');
const taskNameInput = document.querySelector('#task-name');

// Event listeners
addTaskForm.addEventListener('submit', addTask);

// Functions
function addTask(event) {
  event.preventDefault();
  const taskName = taskNameInput.value;

  // Validate task name
  if (taskName === '') {
    alert('Please enter a task name');
    return;
  }

  // Add task to the tasks array
  tasks.push({
    name: taskName,
    completed: false,
  });

  // Clear the task name input
  taskNameInput.value = '';

  // Render the tasks
  renderTasks();
}

function renderTasks() {
  taskList.innerHTML = '';
  for (let i = 0; i < tasks.length; i++) {
    const task = tasks[i];
    const taskEl = document.createElement('div');
    taskEl.classList.add('task');
    taskEl.innerHTML = `
            <div>${task.name}</div>
            <button>Complete</button>
            <button>Delete</button>
        `;
    taskList.appendChild(taskEl);
  }
}
