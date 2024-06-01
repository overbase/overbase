#include <stdio.h>
#include <string.h>
#include "command/help.h"

typedef void (*CommandFunction)();

typedef struct {
    const char* name;
    CommandFunction function;
} Command;

Command commands[] = {
        {"help", help}
};

int main(int argc, char *argv[]) {

    printf("OverBase\n\n");

    if (argc < 2) {
        help();
    }

    return 0;
}