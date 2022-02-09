import os

def handler(event, context):
    return "Hello " + event['name'] + "! I'm Python and running in " + os.environ.get('AWS_EXECUTION_ENV')
