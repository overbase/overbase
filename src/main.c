#include <stdio.h>
#include <string.h>
#include "cmd/help.h"

typedef void (*CmdFnc)();

typedef struct {
    const char* name;
    CmdFnc function;
} Cmd;

Cmd commands[] = {
        {"help", help}
};

int main(int argc, char *argv[]) {

    printf("OverBase\n\n");

    if (argc < 2) {
        help();
    }

    return 0;
}