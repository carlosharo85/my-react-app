const core = require("@actions/core");
const github = require("@actions/github");

try {
    core.debug("Debug message");
    core.warning("Warning message");
    core.error("Error message");

    const name = core.getInput("who-to-greet");
    core.setSecret(name);
    console.log(`hello ${name}`);

    const time = new Date();
    core.setOutput("time", time.toTimeString());

    core.startGroup("loggin github object");
    console.log(JSON.stringify(github, null, "\t"));
    core.endGroup();
} catch (error) {
    core.setFailed(error.message);
}
