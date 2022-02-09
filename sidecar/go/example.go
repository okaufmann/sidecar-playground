package main

import (
	"context"
	"fmt"
	"os"

	"github.com/aws/aws-lambda-go/lambda"
)

type MyEvent struct {
	Name string `json:"name"`
}

func HandleRequest(ctx context.Context, event MyEvent) (string, error) {

	return fmt.Sprintf("Hello, %s! I'm Go and running in %s", event.Name, os.Getenv("AWS_EXECUTION_ENV")), nil
}

func main() {
	lambda.Start(HandleRequest)
}
