
using Amazon.Lambda.Core;

// Assembly attribute to enable the Lambda function's JSON input to be converted into a .NET class.
[assembly: LambdaSerializer(typeof(Amazon.Lambda.Serialization.Json.JsonSerializer))]

namespace dotnet
{
    public class Function
    {

        public string FunctionHandler(Event eventData, ILambdaContext context)
        {
            return $"Hello, {eventData.name}! I'm NodeJS and running in {System.Environment.GetEnvironmentVariable("AWS_EXECUTION_ENV")}";
        }
    }

    public class Event
    {
        public string name { get; set; }
    }
}
