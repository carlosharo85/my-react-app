module.exports = {
    branches: "master",
    repositoryUrl: "https://github.com/carlosharo85/my-react-app/",
    plugins: [
        "@semantic-release/commit-analyzer",
        "@semantic-release/release-notes-generator",
        [
            "@semantic-release/github",
            {
                assets: "dist/*.tgz",
            },
        ],
    ],
};
