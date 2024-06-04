#include <string.h>

void test_parse_uri();

int main(int argc, char *argv[]) {
    if (argc < 2 || strcmp(argv[1], "1") == 0)
        test_parse_uri();
}