import { Tabs } from "flowbite";

// Initialize the tabs element
const tabsElement = document.getElementById("first-health-profile-tab");

// Create the tab elements array
const tabElements = [
    {
        id: "profile",
        triggerEl: document.querySelector("#profile-tab"),
        targetEl: document.querySelector("#profile"),
    },
    {
        id: "social",
        triggerEl: document.querySelector("#social-history-tab"),
        targetEl: document.querySelector("#social-history"),
    },
    {
        id: "medical",
        triggerEl: document.querySelector("#medical-history-tab"),
        targetEl: document.querySelector("#medical-history"),
    },
    {
        id: "surgical",
        triggerEl: document.querySelector("#surgical-history-tab"),
        targetEl: document.querySelector("#surgical-history"),
    },
    {
        id: "immunizations",
        triggerEl: document.querySelector("#immunizations-tab"),
        targetEl: document.querySelector("#immunizations"),
    },
];

// Define options
const options = {
    defaultTabId: "medical", // Set the initial tab
    activeClasses:
        "text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-400 border-blue-600 dark:border-blue-500",
    inactiveClasses:
        "text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300",
    onShow: () => {
        console.log("Tab is shown");
    },
};

// Define instance options
const instanceOptions = {
    id: "health-profile-tab",
    override: true,
};

// Initialize Tabs
const tabs = new Tabs(tabsElement, tabElements, options, instanceOptions);

document.addEventListener("livewire:init", () => {
    Livewire.on("switch-tab", (event) => {
        const tabId = event[0].tabId;
        tabs.show(tabId); // Switch to the specified tab
    });
});
