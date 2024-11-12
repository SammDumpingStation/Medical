import { Tabs } from "flowbite";

// Listen for Livewire events as soon as the script loads
document.addEventListener("livewire:init", () => {
    Livewire.on("switch-tab", (event) => {
        const tabId = event[0].tabId; // Adjust to match the structure of your dispatched data

        // Ensure Flowbite is fully initialized before accessing tabs            // Reference to the container holding the tab triggers and targets
        const tabsElement = document.getElementById("first-health-profile-tab");

        // Define the array of tab elements
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

        // Create Tabs instance
        const tabs = new Tabs(tabsElement, tabElements);

        tabs.show(tabId); // Switch to the specified tab
    });
});

document.addEventListener("livewire:init", () => {
    Livewire.on("switch-tab-form2", (event) => {
        const tabId = event[0].tabId; // Adjust to match the structure of your dispatched data

        // Ensure Flowbite is fully initialized before accessing tabs            // Reference to the container holding the tab triggers and targets
        const tabsElement = document.getElementById("second-health-profile-tab");

        // Define the array of tab elements
        const tabElements = [
            {
                id: "physical-screening",
                triggerEl: document.querySelector("#physical-screening-tab"),
                targetEl: document.querySelector("#physical-screening"),
            },
            {
                id: "physical-examination",
                triggerEl: document.querySelector("#physical-examination-tab"),
                targetEl: document.querySelector("#physical-examination"),
            },
            {
                id: "ancillary-examination",
                triggerEl: document.querySelector("#ancillary-examination-tab"),
                targetEl: document.querySelector("#ancillary-examination"),
            },
            {
                id: "student-classification",
                triggerEl: document.querySelector(
                    "#student-classification-tab"
                ),
                targetEl: document.querySelector("#student-classification"),
            },
            {
                id: "personal-remarks",
                triggerEl: document.querySelector("#personal-remarks-tab"),
                targetEl: document.querySelector("#personal-remarks"),
            },
        ];

        // Create Tabs instance
        const tabs = new Tabs(tabsElement, tabElements);

        tabs.show(tabId); // Switch to the specified tab
    });
});
