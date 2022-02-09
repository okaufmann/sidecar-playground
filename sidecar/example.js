exports.handler = async function (event) {
    return `Hello, ${event.name}! I'm NodeJS and running in  ${process.env.AWS_EXECUTION_ENV}`;
}
