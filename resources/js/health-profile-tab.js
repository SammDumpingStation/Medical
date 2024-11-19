import { Tabs } from "flowbite";

document.addEventListener("livewire:init", () => {
    Livewire.on("switch-tab", (event) => {

        const tabId = event[0].tabId;
        const tabsElement = document.getElementById("first-health-profile-tab");

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

        const tabs = new Tabs(tabsElement, tabElements);

        tabs.show(tabId);
    });
});

document.addEventListener("livewire:init", () => {
    Livewire.on("switch-tab-form2", (event) => {
        const tabId = event[0].tabId;

        const tabsElement = document.getElementById(
            "second-health-profile-tab"
        );

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

        const tabs = new Tabs(tabsElement, tabElements);
        // Switch to the specified tab
    });
});

document.addEventListener("livewire:init", () => {
    Livewire.on("switch-tab-form2", (event) => {
        const tabId = event[0].tabId;
        const tabsElement = document.getElementById("third-health-profile-tab");

        const tabElements = [
            {
                id: "menstrual-history",
                triggerEl: document.querySelector("#menstrual-history-tab"),
                targetEl: document.querySelector("#menstrual-history"),
            },
            {
                id: "head-to-toe-assessment",
                triggerEl: document.querySelector(
                    "#head-to-toe-assessment-tab"
                ),
                targetEl: document.querySelector("#head-to-toe-assessment"),
            },
            {
                id: "other-findings",
                triggerEl: document.querySelector("#other-findings-tab"),
                targetEl: document.querySelector("#other-findings"),
            },
        ];

        const tabs = new Tabs(tabsElement, tabElements);

        tabs.show(tabId);
    });
});

document.addEventListener("livewire:init", () => {
    Livewire.on("switch-tab-form2", (event) => {
        const tabId = event[0].tabId;
        const tabsElement = document.getElementById("doctor-confirmation-tab");

        const tabElements = [
            {
                id: "health-profile",
                triggerEl: document.querySelector("#health-profile-tab"),
                targetEl: document.querySelector("#health-profile"),
            },
            {
                id: "confirmation",
                triggerEl: document.querySelector(
                    "#head-to-toe-assessment-tab"
                ),
                targetEl: document.querySelector("#confirmation"),
            },
        ];

        const tabs = new Tabs(tabsElement, tabElements);

        tabs.show(tabId);
    });
});
